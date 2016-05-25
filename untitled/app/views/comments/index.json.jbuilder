json.array!(@comments) do |comment|
  json.extract! comment, :id, :post_id, :user_id, :content, :timestamp
  json.url comment_url(comment, format: :json)
end
