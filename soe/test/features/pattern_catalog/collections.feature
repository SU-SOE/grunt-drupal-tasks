Feature: Ensure instructions on the Collections page appear as expected
  As an administrator
  I want to be able to view the instructions and see the samples

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "pattern-catalog/collections"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h1" element
    Then I should see the text "Collections"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h2" element
    Then I should see the text "Collections"
