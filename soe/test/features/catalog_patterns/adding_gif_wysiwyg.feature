Feature: Ensure items on the Adding a GIF in the WYSIWYG page appear as expected
  In order to ensure items on the Adding a GIF in the WYSIWYG page appear as expected
  As an administrator
  I want to be able to view the instructions and see the sample

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "catalog-patterns/creating-content/adding-gif-wysiwyg"

  @safe @api
  Scenario: Verify users can view the How to insert a Gif into your content: section
    Then I should see a ".field-type-text-with-summary" element
    Then I should see a ".field-type-text-with-summary img" element
