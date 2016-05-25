json.array!(@users) do |user|
  json.extract! user, :id, :name, :pass, :email, :admin, :firstname, :lastname, :image, :phone, :address, :description
  json.url user_url(user, format: :json)
end
