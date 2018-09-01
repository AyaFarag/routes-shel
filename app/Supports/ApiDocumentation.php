<?php

namespace App\Supports;
use Illuminate\Http\Request;
use App\Models\Pages;
use App\Supports\ApiDocumentationTrait;

class ApiDocumentation {
  use ApiDocumentationTrait;

  const DEFAULT_HEADERS = [
    "Content-Type" => "application/json",
    "Accept"       => "application/json"
  ];
  const AUTHENTICATED_HEADERS = ["Authorization" => "Bearer {token}"];

  const CATEGORIES = [
    "companies",
    "clients"
  ];

  public function all($categories = null) {
    $endpoints = [];
    if ($categories) {
      foreach ($categories as $category) {
        $endpoints = array_merge($endpoints, $this -> {$category}());
      }
      return $endpoints;
    }

    foreach (self::CATEGORIES as $category) {
      $endpoints = array_merge($endpoints, $this -> {$category}());
    }
    return $endpoints;
  }

  public function get($route) {
    foreach (self::CATEGORIES as $category) {
      foreach ($this -> {$category}() as $endpoint) {
        if ($endpoint["url"] === $route) {
          return $endpoint;
        }
      }
    }
    return [];
  }

  public function companies() {
    return [
      [
        "name"        => "Client Login",
        "headers"     => array_merge(self::AUTHENTICATED_HEADERS, self::DEFAULT_HEADERS),
        "url"         => "/api/login",
        "method"      => "get",
        "description" => "Login",
        "parameters"  => function () {
          return $this -> postParameters(new \App\Http\Requests\Api\LoginRequest());
        },
        "responses"   => function () {
          return [
            [
              "code" =>200,
              "data" =>["data"=>[]],
            ]
          ];
        }
      ]
    ];
  }

  public function clients() {
    return [];
  }
}