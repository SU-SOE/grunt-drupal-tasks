Feature: Ensure instructions on the Style Guide Table page appear as expected
  As an administrator
  I want to be able to view the instructions and see the samples

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "catalog-patterns/style-guide-table"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h1" element
    Then I should see the text "Style Guide Table"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "span" element
    Then I should see the text "This style guide lists and explains the classes available on this site."
