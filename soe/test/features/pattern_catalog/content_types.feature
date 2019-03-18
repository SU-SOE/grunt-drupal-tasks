Feature: Ensure instructions on the Content Types page appear as expected
  As an administrator
  I want to be able to view the instructions and see the samples

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "pattern-catalog/content-types"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h1" element
    Then I should see the text "Content Types"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "a" element
    Then I should see the text "Manage content page"
