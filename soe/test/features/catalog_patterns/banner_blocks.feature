Feature: Ensure items on the Banner Blocks page appear as expected
  In order to ensure items on the Banner Blocks page appear as expected
  As an administrator
  I want to be able to view the instructions and see the samples

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "catalog-patterns/blocks-and-beans/banner-blocks"

  @safe @api
  Scenario: Verify users can view the Banner blocks Heading
    Then I should see a "h1" element
    Then I should see the text "Banner Blocks"

  @safe @api
  Scenario: Verify users can view the sample banner
    Then I should see a "h2" element
    Then I should see the text "Sample Banner Block 5 - Banner 9 Column"
