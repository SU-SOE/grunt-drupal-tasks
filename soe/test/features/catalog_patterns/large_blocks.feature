Feature: Ensure instructions on the Large blocks page appear as expected
  As an administrator
  I want to be able to view the instructions and see the samples

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "catalog-patterns/blocks-and-beans/large-blocks"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h1" element
    Then I should see the text "Large blocks"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h2" element
    Then I should see the text "Sample Large block 1"
