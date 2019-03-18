Feature: Ensure instructions on the Icon blocks page appear as expected
  As an administrator
  I want to be able to view the instructions and see the samples

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "catalog-patterns/blocks-and-beans/icon-blocks"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h1" element
    Then I should see the text "Icon blocks"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h2" element
    Then I should see the text "Sample Icon Block"
