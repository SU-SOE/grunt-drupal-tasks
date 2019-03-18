Feature: Ensure instructions on the Featured Content Blocks Testing Content page appear as expected
  As an administrator
  I want to be able to view the instructions and see the samples

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "catalog-patterns/blocks-and-beans/featured-blocks/featured-content-blocks-testing-content"

  @safe @api
  Scenario: Verify users can view the Featured Content Blocks Testing Content Heading
    Then I should see a "h1" element
    Then I should see the text "Featured Content Blocks Testing Content"
