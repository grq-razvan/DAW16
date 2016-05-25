# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20160405065428) do

  create_table "comments", force: :cascade do |t|
    t.integer  "post_id",   limit: 4,   null: false
    t.integer  "user_id",   limit: 4,   null: false
    t.string   "content",   limit: 500, null: false
    t.datetime "timestamp",             null: false
  end

  create_table "emails", id: false, force: :cascade do |t|
    t.string   "sender",   limit: 255, null: false
    t.string   "content",  limit: 500, null: false
    t.string   "receiver", limit: 255, null: false
    t.datetime "date",                 null: false
  end

  create_table "users", force: :cascade do |t|
    t.string  "name",        limit: 255,                   null: false
    t.string  "pass",        limit: 255,                   null: false
    t.string  "email",       limit: 255,                   null: false
    t.boolean "admin",                     default: false, null: false
    t.string  "firstname",   limit: 50
    t.string  "lastname",    limit: 50
    t.string  "image",       limit: 200
    t.string  "phone",       limit: 25
    t.string  "address",     limit: 125
    t.text    "description", limit: 65535
  end

end