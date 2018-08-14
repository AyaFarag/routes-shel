<?php

return [
  "items" => [
    [
      "label" => "Moderators",
      "icon" => "security",
      "submenu" => [
        [
          "label" => "List",
          "route" => "admin.moderator.index",
          "icon" => "list"
        ],
        [
          "label" => "Add",
          "route" => "admin.moderator.add",
          "icon" => "add"
        ]
      ]
    ],
    [
      "label" => "Specializations",
      "icon" => "sd_card",
      "route" => "admin.specializations"
    ]
  ]
];