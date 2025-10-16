// Subscription Plans Element JavaScript
;(($) => {
  // Declare jQuery variable
  var jQuery = $

  // Initialize subscription plans functionality
  function initSubscriptionPlans() {
    $(".subscription-plans-wrapper").each(function () {
      var $wrapper = $(this)
      var uniqueId = $wrapper.attr("id")
      var selectedPlan = ""

      // Card selection
      $wrapper.find(".subscription-card").on("click", function () {
        // Remove selected class from all cards
        $wrapper.find(".subscription-card").removeClass("selected")

        // Add selected class to clicked card
        $(this).addClass("selected")

        // Update selected plan
        selectedPlan = $(this).data("plan")
        $wrapper.find('input[name="subscription_plan"]').val(selectedPlan)

        // Enable add to cart button
        $wrapper.find(".add-to-cart-button").prop("disabled", false)
      })

      // Add to cart functionality
      $wrapper.find(".add-to-cart-button").on("click", (e) => {
        e.preventDefault()

        if (!selectedPlan) {
          $wrapper.find(".error-message").text("Please select a subscription plan.").show()
          return
        }

        $wrapper.find(".error-message").hide()
        $wrapper.find("form").submit()
      })

      // Initialize - disable add to cart button initially
      $wrapper.find(".add-to-cart-button").prop("disabled", true)
    })
  }

  // Initialize on document ready
  $(document).ready(() => {
    initSubscriptionPlans()
  })

  // Re-initialize when Bricks builder updates elements
  $(document).on("bricks/ajax/load_page/completed", () => {
    initSubscriptionPlans()
  })
})(window.jQuery)
