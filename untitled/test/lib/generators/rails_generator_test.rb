require 'test_helper'
require 'generators/rails/rails_generator'

class RailsGeneratorTest < Rails::Generators::TestCase
  tests RailsGenerator
  destination Rails.root.join('tmp/generators')
  setup :prepare_destination

  # test "generator runs without errors" do
  #   assert_nothing_raised do
  #     run_generator ["arguments"]
  #   end
  # end
end
