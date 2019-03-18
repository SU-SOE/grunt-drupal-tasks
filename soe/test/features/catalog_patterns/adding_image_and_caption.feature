Feature: Ensure items on the Adding a GIF in the WYSIWYG page appear as expected
  In order to ensure items on the Adding a GIF in the WYSIWYG page appear as expected
  As an administrator
  I want to be able to view the instructions and see the sample

  Background:
    Given I am logged in as a user with the "administrator" role
    Given I am on "catalog-patterns/creating-content/adding-image-and-caption"

  @safe @api
  Scenario: Verify users can view the FW Banner People Spotlight view block
    Then I should see a "h3" element
    Then I should see the text "Sample Content"
