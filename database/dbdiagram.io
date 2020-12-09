Project okja {
  database_type: "MySQL"
}

table brands {
  id bigint [pk, increment]
  name string
  avatar string [null]
  url string [null]
  created_at timestamp
  updated_at timestamp
  deleted_at timestamp
}

table categories {
  id bigint [pk, increment]
  name string
  created_at timestamp
  updated_at timestamp
  deleted_at timestamp
}

table data_rows {
  id bigint [pk, increment]
  data_type_id bigint [ref: > data_types.id]
  field string
  type string
  display_name string
  required boolean [default:0]
  browse boolean [default:1]
  read boolean [default:1]
  edit boolean [default:1]
  add boolean [default:1]
  delete boolean [default:1]
  details text [null]
  order integer
}

table data_types {
  id bigint [pk, increment]
  name string [unique]
  slug string [unique]
  display_name_singular string
  display_name_plural string
  icon string [null]
  model_name string [null]
  policy_name string [null]
  controller string [null]
  description string [null]
  generate_permissions boolean [default:0]
  server_side tinyint [default:0]
  details text [null]
  created_at timestamp
  updated_at timestamp
}

table failed_jobs {
  id bigint [pk, increment]
  uuid string [unique]
  connection text
  queue text
  payload longtext
  exception longtext
  failed_at timestamp
}

table menu_items {
  id bigint [pk, increment]
  menu_id bigint [null,ref: > menus.id]
  title string
  url string
  target string
  icon_class string [null]
  color string [null]
  parent_id integer [null]
  order integer
  route integer [null]
  parameters text [null]
  created_at timestamp
  updated_at timestamp
}

table menus {
  id bigint [pk, increment]
  name string [unique]
  created_at timestamp
  updated_at timestamp
}

table migrations {
  id bigint [pk, increment]
  migration string
  batch integer
}

table outlets {
  id bigint [pk, increment]
  brand_id bigint [ref: > brands.id]
  name string
  address text [null]
  latitude decimal(9,6) [null]
  longitude decimal(9,6) [null]
  created_at timestamp
  updated_at timestamp
  deleted_at timestamp
}

table password_resets {
  email string
  token string
  created_at timestamp
}

table permission_role {
  permission_id bigint [ref: > permissions.id]
  role_id bigint [ref: > roles.id]
}

table permissions {
  id bigint [pk, increment]
  key string
  table_name string [null]
  created_at timestamp
  updated_at timestamp
}

table products {
  id bigint [pk, increment]
  outlet_id bigint [ref: > outlets.id]
  category_id bigint [ref: > categories.id]
  product_code string
  name string
  avatar string [null]
  availability integer
  price integer
  expired_date date [null]
  qty_balance integer
  qty_total integer
  created_at timestamp
  updated_at timestamp
  deleted_at timestamp
}

table roles {
  id bigint [pk, increment]
  name string
  display_name string
  created_at timestamp
  updated_at timestamp
}

table settings {
  id int [pk, increment]
  key string
  display_name string
  value text
  details text
  type string
  order integer
  group string
}

table translations {
  id int [pk, increment]
  table_name string
  column_name string
  foreign_key integer
  locale string
  value text
  created_at timestamp
  updated_at timestamp
}

table user_roles {
  user_id bigint [ref: > users.id]
  role_id bigint [ref: > roles.id]
}

table users {
  id bigint [pk, increment]
  role_id bigint [ref: > roles.id]
  brand_id bigint [ref: > brands.id]
  name string
  email string
  avatar string
  email_verified_at datetime
  password string
  created_at timestamp
  updated_at timestamp
  deleted_at timestamp
}
