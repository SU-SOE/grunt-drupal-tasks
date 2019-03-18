Feature: Ensure instructions on the Big text block page appear as expected
  As an administrator
  I want to be able to view the instructions and see the samples

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "catalog-patterns/blocks-and-beans/big-text-block"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h1" element
    Then I should see the text "Big text block"

  @safe @api
  Scenario: Verify users can view the sample big text block 1
    Then I should see a "h2" element
    Then I should see the text "Big text block 1"

  @safe @api
  Scenario: Verify users can view the sample big text block 2
    Then I should see a "h2" element
    Then I should see the text "Big text block 2"
