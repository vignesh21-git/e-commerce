<html>
<head>
<title>Order Now</title>
<link href = "/e-commerce/Assetss/css/index.css" rel="stylesheet" type = "text/css">

<style>
    body{ -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;
     }
</style>
</head>
<?php
$email = $_POST['email'];
$pass = $_POST['password'];

//echo $email;
//echo $pass;
//Database Connection
$conn = new mysqli('mysql.selfmade.ninja','vignesh_21','Vignesh?','vignesh_21_ecommerce');
if($conn->connect_error){
  die("Failed to connect database :".$conn->connect_error);
}else{
    $query = "SELECT * FROM `users` WHERE `email` = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($row['password'] == $pass) {
            //if (password_verify($pass, $row['password'])) {
          /*
          1. Generate Session Token
          2. Insert Session Token
          3. Build session and give session to user.
          */?>
          <body style="padding-left: 100px;padding-right: 100px";>
    <div id="Banner" class="banner">
        <div class="banner-wrap">
            <div class = "notice-text">
                We're open and available for takeaway & delivery
                <a class = "white-link" href="order.html">Order Now</a>
            </div>
        </div>
    </div>
    <div class="navigation-container">
        <div class="navigation-left">
            <a href="#" aria-current="page" class="brand w-nav-brand w--current">
                <img src="/e-commerce/Assetss/images/Ecommerce_logo.jpeg" alt="" width="100"></a></div>
                <div class="navigation-right"><div class="menu-button w-nav-button"><div class="icon w-icon-nav-menu"></div></div>
                <nav role="navigation" class="nav-menu w-nav-menu"></nav>
                <a href="index.html" aria-current="page" class="nav-link w-nav-link w--current">Home</a>
                <a href="order.html" class="nav-link w-nav-link">Order</a>
                <a href="company.html" class="nav-link w-nav-link">Company</a>
                <a href="login.html" class="nav-link w-nav-link">Login</a>
               <!---->
                <a href="mailto:vignesh_2102@protonmail.com?subject=Hi" class="nav-link w-nav-link">Contact</a>
            </nav>
            <div data-node-type="commerce-cart-wrapper" data-open-product="" data-wf-cart-type="rightSidebar" data-wf-cart-query="query Dynamo2 {
                database {
                  id
                  commerceOrder {
                    comment
                    extraItems {
                      name
                      pluginId
                      pluginName
                      price {
                        value
                        unit
                        decimalValue
                        string
                      }
                    }
                    id
                    startedOn
                    statusFlags {
                      hasDownloads
                      hasSubscription
                      isFreeOrder
                      requiresShipping
                    }
                    subtotal {
                      value
                      unit
                      decimalValue
                      string
                    }
                    total {
                      value
                      unit
                      decimalValue
                      string
                    }
                    updatedOn
                    userItems {
                      count
                      sku {
                        f__draft_0ht
                        f__archived_0ht
                        f_main_image_4dr {
                          url
                          file {
                            size
                            origFileName
                            createdOn
                            updatedOn
                            mimeType
                            width
                            height
                            variants {
                              origFileName
                              quality
                              height
                              width
                              s3Url
                              error
                              size
                            }
                          }
                          alt
                        }
                        f_price_ {
                          value
                          unit
                          decimalValue
                          string
                        }
                        f_sku_values_3dr {
                          property {
                            id
                          }
                          value {
                            id
                          }
                        }
                        id
                      }
                      product {
                        id
                        f__draft_0ht
                        f__archived_0ht
                        f_name_
                        f_sku_properties_3dr {
                          id
                          name
                          enum {
                            id
                            name
                            slug
                          }
                        }
                      }
                      id
                      rowTotal {
                        value
                        unit
                        decimalValue
                        string
                      }
                      subscriptionFrequency
                      subscriptionInterval
                      subscriptionTrial
                    }
                    userItemsCount
                  }
                }
                site {
                  id
                  commerce {
                    businessAddress {
                      country
                    }
                    defaultCountry
                    defaultCurrency
                    quickCheckoutEnabled
                  }
                }
              }
              " data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper"><a href="#" data-node-type="commerce-cart-open-link" class="w-commerce-commercecartopenlink cart-button w-inline-block"><svg class="w-commerce-commercecartopenlinkicon cart-icon" width="17px" height="17px" viewBox="0 0 17 17"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M2.60592789,2 L0,2 L0,0 L4.39407211,0 L4.84288393,4 L16,4 L16,9.93844589 L3.76940945,12.3694378 L2.60592789,2 Z M15.5,17 C14.6715729,17 14,16.3284271 14,15.5 C14,14.6715729 14.6715729,14 15.5,14 C16.3284271,14 17,14.6715729 17,15.5 C17,16.3284271 16.3284271,17 15.5,17 Z M5.5,17 C4.67157288,17 4,16.3284271 4,15.5 C4,14.6715729 4.67157288,14 5.5,14 C6.32842712,14 7,14.6715729 7,15.5 C7,16.3284271 6.32842712,17 5.5,17 Z" fill="currentColor" fill-rule="nonzero"></path></g></svg>
                <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D" class="w-commerce-commercecartopenlinkcount cart-quantity"></div></a><div data-node-type="commerce-cart-container-wrapper" style="display:none" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar"><div data-node-type="commerce-cart-container" class="w-commerce-commercecartcontainer"><div class="w-commerce-commercecartheader"><h4 class="w-commerce-commercecartheading">Your Order</h4><a href="#" data-node-type="commerce-cart-close-link" class="w-commerce-commercecartcloselink w-inline-block"><svg width="16px" height="16px" viewBox="0 0 16 16"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g fill-rule="nonzero" fill="#333333"><polygon points="6.23223305 8 0.616116524 13.6161165 2.38388348 15.3838835 8 9.76776695 13.6161165 15.3838835 15.3838835 13.6161165 9.76776695 8 15.3838835 2.38388348 13.6161165 0.616116524 8 6.23223305 2.38388348 0.616116524 0.616116524 2.38388348 6.23223305 8"></polygon></g></g></svg></a></div><div class="w-commerce-commercecartformwrapper"><form data-node-type="commerce-cart-form" style="display:none" class="w-commerce-commercecartform"><script type="text/x-wf-template" id="wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4be4">%3Cdiv%20class%3D%22w-commerce-commercecartitem%22%3E%3Cimg%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%252C%257B%2522alt%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_price_%2522%257D%257D%255D%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4bea%22%3E%253Cli%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4bea%22%3E%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22remove-button%20w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%3E%3Cdiv%20class%3D%22text-block-2%22%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20type%3D%22text%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartquantity%22%20name%3D%22quantity%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E</script>
                  <div class="w-commerce-commercecartlist" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4be4"></div><div class="w-commerce-commercecartfooter"><div class="w-commerce-commercecartlineitem cart-line-item"><div></div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D" class="w-commerce-commercecartordervalue text-block"></div></div><div><div data-node-type="commerce-cart-quick-checkout-actions" style="display:none"><a data-node-type="commerce-cart-apple-pay-button" style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat" class="w-commerce-commercecartapplepaybutton apple-pay"><div></div></a><a data-node-type="commerce-cart-quick-checkout-button" style="display:none" class="w-commerce-commercecartquickcheckoutbutton"><svg class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16"><defs><polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon><polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon></defs><g fill="none" fill-rule="evenodd"><path fill="#4285F4" d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469"></path><path fill="#34A853" d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16"></path><g transform="translate(0 4)"><mask id="google-mark-b" fill="#fff"><use xlink:href="#google-mark-a"></use></mask><path fill="#FBBC04" d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337" mask="url(#google-mark-b)"></path></g><mask id="google-mark-d" fill="#fff"><use xlink:href="#google-mark-c"></use></mask><path fill="#EA4335" d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291" mask="url(#google-mark-d)"></path></g></svg><svg class="w-commerce-commercequickcheckoutmicrosofticon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><g fill="none" fill-rule="evenodd"><polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon><polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon><polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon><polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon></g></svg><div>Pay with browser.</div></a></div><a href="/checkout" value="Continue to Checkout" data-node-type="cart-checkout-button" class="w-commerce-commercecartcheckoutbutton checkout-button" data-loading-text="Hang Tight...">Continue to Checkout</a></div></div></form><div class="w-commerce-commercecartemptystate empty-state"><div>We couldn't find any items in your cart.</div><div class="button-arrow-wrap"><a href="track.html" class="button w-button">Track your Order</a><img src="https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa3672576b5ef_Drawn%20Arrow.svg" alt="" class="arrow-drawn"></div></div><div style="display:none" data-node-type="commerce-cart-error" class="w-commerce-commercecarterrorstate"><div class="w-cart-error-msg" data-w-cart-quantity-error="Product is not available in this quantity." data-w-cart-general-error="Something went wrong when adding this item to the cart." data-w-cart-checkout-error="Checkout is disabled on this site." data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue." data-w-cart-subscription_error-Order failed.">Product is not available in this quantity.</div></div></div></div></div></div>
        </div>
    </div>
</div>
<div class="w-nav-overlay" data-wf-ignore=""></div>
<div class="title-wrap-centre"><h1 style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); opacity: 1; transform-style: preserve-3d;" class="header-h1">Get your food <span class="brand-span">delivered</span>, or <span class="brand-span">pick-up</span> in store.</h1></div>
<div class="container"></div>
<div class="title-wrap-centre">
                <h2>Browse our menu</h2><p>Use our menu to place an order online, or phone our store to <br>place a pickup order. Fast and fresh food.</p></div>
                <div data-duration-in="300" data-duration-out="100" data-current="Fruits" data-easing="ease" class="w-tabs"><div class="tab-menu-round w-tab-menu" role="tablist"><a data-w-tab="Fruits" class="tab-link-round w-inline-block w-tab-link w--current" id="w-tabs-0-data-w-tab-0" href="#w-tabs-0-data-w-pane-0" role="tab" aria-controls="w-tabs-0-data-w-pane-0" aria-selected="true"><div>Fruits</div></a><a data-w-tab="Veggies" class="tab-link-round w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-1" href="#w-tabs-0-data-w-pane-1" role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false">
                    <div>Veggies</div></a><a data-w-tab="Drinks" class="tab-link-round w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-2" href="#w-tabs-0-data-w-pane-2" role="tab" aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false"><div>Drinks</div></a></div><div class="w-tab-content"><div data-w-tab="Fruits" class="tab-pane-wrap w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0"><div class="w-dyn-list">
                        <div role="list" class="order-collection w-dyn-items w-row">
                            <div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/oranges.html" class="food-image-square w-inline-block">
                                <img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://www.pngall.com/wp-content/uploads/2016/05/Orange-PNG.png" alt="" class="food-image">
                            </a><div class="food-card-content">
                                <a href="products/oranges.html" class="food-title-wrap w-inline-block"><h6>Orange</h6>
                                    <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;9.20&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa3905776b635" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa32ba376b634" class="w-commerce-commerceaddtocartform default-state">
                                        <input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card">
                                            <a href="products/apples.html" class="food-image-square w-inline-block">
                                                <img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://www.pngkey.com/png/full/932-9328480_apples-png-image-red-apple-fruit.png
                                                " alt="" class="food-image"></a><div class="food-card-content"><a href="products/apples.html" class="food-title-wrap w-inline-block"><h6>Apple</h6>
                                                    <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;10.00&nbsp;USD</div></a><p class="paragraph"></p>
                                                    <div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa36db276b633" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa3baa276b632" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button">
                                                    </form>
                                                        <div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div>
                                                        <div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/muskmelons.html" class="food-image-square w-inline-block">
                                                            <img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://5.imimg.com/data5/AT/AF/MY-3674107/musk-melon-500x500.jpg" alt="" class="food-image"></a><div class="food-card-content"><a href="products/muskmelons.html" class="food-title-wrap w-inline-block"><h6>Musk Melon</h6>
                                                                <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;8.00&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa3c35476b631" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa37e2276b630" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/pomegranates.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://www.pngplay.com/wp-content/uploads/6/Ripe-Pomegranate-Transparent-PNG.png" alt="" class="food-image"></a><div class="food-card-content"><a href="products/pomegranates.html" class="food-title-wrap w-inline-block"><h6>Pomegranate</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;9.99&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa34a1f76b62f" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa3313076b62e" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/grapes.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src=" https://1.bp.blogspot.com/-VBuAzSKo3bM/X6K8f8T0AZI/AAAAAAAAAi8/4cx8BcupfBkO5l3YqQN2b4ilxwdhJ39eQCLcBGAsYHQ/s16000/thumb_grape.png" alt="" class="food-image"></a><div class="food-card-content"><a href="products/grapes.html" class="food-title-wrap w-inline-block"><h6>Grapes</h6>
                                                                    <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;9.20&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa34e8676b62c" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa3609c76b61b" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div>
                                                                    <div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/watermelons.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://thumbs.dreamstime.com/b/big-watermelon-slice-white-background-as-package-design-element-44517200.jpg" alt="" class="food-image"></a><div class="food-card-content"><a href="products/watermelons.html" class="food-title-wrap w-inline-block"><h6>Water Melon</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;8.00&nbsp;USD</div></a>
                                                                    <p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa36e2876b5cc" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa3000f76b5b9" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div>
                                                                    <div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div></div></div></div><div data-w-tab="Veggies" class="w-tab-pane" id="w-tabs-0-data-w-pane-1" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-1"><div class="w-dyn-list"><div role="list" class="order-collection w-dyn-items w-row"><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/carrots.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Fresh_Carrots.jpg/1200px-Fresh_Carrots.jpg" alt="" class="food-image"></a><div class="food-card-content">
                                                                        <a href="products/carrots.html" class="food-title-wrap w-inline-block"><h6>Carrot</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;6.00&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa339e576b63d" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa3751e76b63c" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state">
                                                                            <div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/potato.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Picture_of_many_potatoes.jpg/1200px-Picture_of_many_potatoes.jpg" alt="" class="food-image"></a><div class="food-card-content"><a href="products/potato.html" class="food-title-wrap w-inline-block"><h6>Potato</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;4.00&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa331c876b63b" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa371f176b63a" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/spinach.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://www.deneennaturalhealth.com/wp-content/uploads/2020/07/spinach-1170x550.jpg" alt="" class="food-image"></a><div class="food-card-content"><a href="products/spinach.html" class="food-title-wrap w-inline-block"><h6>Spinach</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;5.00&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa3261576b639" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa3a3b676b638" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/tomato.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://pngimg.com/uploads/tomato/tomato_PNG12589.png" alt="" class="food-image"></a><div class="food-card-content"><a href="products/tomato.html" class="food-title-wrap w-inline-block"><h6>Tomato</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;4.00&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa34f1076b637" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa3281176b636" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div></div></div></div><div data-w-tab="Drinks" class="w-tab-pane" id="w-tabs-0-data-w-pane-2" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-2"><div class="w-dyn-list"><div role="list" class="order-collection w-dyn-items w-row"><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/drink_fig_lime.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://assets.website-files.com/5e865e09d8efa3d64d76b59d/5e865e09d8efa3409976b5b0_Drink%201.png" alt="" class="food-image"></a><div class="food-card-content"><a href="products/drink_fig_lime.html" class="food-title-wrap w-inline-block"><h6>Drink Fig &amp; Lime</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;4.00&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa32f4f76b645" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa3bec576b644" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please
                                                                               select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/buttermilk.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://5.imimg.com/data5/VT/VS/MY-10772248/chaas-2f-buttermilk-and-tak-500x500.png" alt="" class="food-image"></a><div class="food-card-content"><a href="products/buttermilk.html" class="food-title-wrap w-inline-block"><h6>Butter Milk</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;7.00&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa34fab76b643" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa3c6a876b642" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/drink_lime.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src="https://assets.website-files.com/5e865e09d8efa3d64d76b59d/5e865e09d8efa3f65176b5ae_Drink%204.png" alt="" class="food-image"></a><div class="food-card-content"><a href="products/drink_lime.html" class="food-title-wrap w-inline-block"><h6>Drink Lime</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;4.00&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa336d476b641" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa30dae76b640" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div><div role="listitem" class="menu-item w-dyn-item w-col w-col-6"><div class="food-card"><a href="products/bermudagrass.html" class="food-image-square w-inline-block"><img data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D" src=" https://www.healthbenefitstimes.com/9/gallery/bermuda-grass/Juice-of-Bermuda-Grass.png" alt="" class="food-image"></a><div class="food-card-content"><a href="products/bermudagrass.html" class="food-title-wrap w-inline-block"><h6>Bermuda Grass</h6><div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D" class="price">$&nbsp;3.00&nbsp;USD</div></a><p class="paragraph"></p><div class="add-to-cart"><form data-node-type="commerce-add-to-cart-form" data-commerce-sku-id="5e865e09d8efa34b1176b63f" data-loading-text="Adding to cart..." data-commerce-product-id="5e865e09d8efa347b876b63e" class="w-commerce-commerceaddtocartform default-state"><input type="number" pattern="^[0-9]+$" inputmode="numeric" id="quantity-77d000eb734842aa4cf87b0bb03800c1" name="commerce-add-to-cart-quantity-input" min="1" class="w-commerce-commerceaddtocartquantityinput quantity" value="1"><input type="submit" value="Order" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." class="w-commerce-commerceaddtocartbutton order-button"></form><div style="display:none" class="w-commerce-commerceaddtocartoutofstock out-of-stock-state"><div>This product is out of stock.</div></div><div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror"><div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div></div></div></div></div></div></div></div></div></div></div><div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); opacity: 1; transform-style: preserve-3d;" class="button-wrapper"><a href="/order" ></a></div></div></div>
                                                                            <div class="w-layout-grid content-grid">
                                                                        


<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5e865e09d8efa3310676b585" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="/e-commerce/Assetss/js/flow.js" type="text/javascript"></script>
</body>
</html>
<?php
        } else {
            //echo "<h3>You made some error</h3>";
          //return false;?>
          <body>
          <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div id="Banner" class="banner">
        <div class="banner-wrap">
            <div class = "notice-text">
                We're open and available for takeaway & delivery
                <a class = "white-link" href="order.html">Order Now</a>
            </div>
        </div>
    </div>
    <div class="navigation-container">
        <div class="navigation-left">
            <a href="/" aria-current="page" class="brand w-nav-brand w--current">
                <img src="/e-commerce/Assetss/images/Ecommerce_logo.jpeg" alt="" width="90"></a></div>
                <div class="navigation-right"><div class="menu-button w-nav-button"><div class="icon w-icon-nav-menu"></div></div>
                <nav role="navigation" class="nav-menu w-nav-menu"></nav>
                <a href="index.html" aria-current="page" class="nav-link w-nav-link w--current">Home</a>
                <a href="order.html" class="nav-link w-nav-link">Order</a>
                <a href="company.html" class="nav-link w-nav-link">Company</a>
                <a href="#" class="nav-link w-nav-link">Login</a>
               <!---->
                <a href="mailto:vignesh_2102@protonmail.com?subject=Hi" class="nav-link w-nav-link">Contact</a>
            </nav>
            <div data-node-type="commerce-cart-wrapper" data-open-product="" data-wf-cart-type="rightSidebar" data-wf-cart-query="query Dynamo2 {
                database {
                  id
                  commerceOrder {
                    comment
                    extraItems {
                      name
                      pluginId
                      pluginName
                      price {
                        value
                        unit
                        decimalValue
                        string
                      }
                    }
                    id
                    startedOn
                    statusFlags {
                      hasDownloads
                      hasSubscription
                      isFreeOrder
                      requiresShipping
                    }
                    subtotal {
                      value
                      unit
                      decimalValue
                      string
                    }
                    total {
                      value
                      unit
                      decimalValue
                      string
                    }
                    updatedOn
                    userItems {
                      count
                      sku {
                        f__draft_0ht
                        f__archived_0ht
                        f_main_image_4dr {
                          url
                          file {
                            size
                            origFileName
                            createdOn
                            updatedOn
                            mimeType
                            width
                            height
                            variants {
                              origFileName
                              quality
                              height
                              width
                              s3Url
                              error
                              size
                            }
                          }
                          alt
                        }
                        f_price_ {
                          value
                          unit
                          decimalValue
                          string
                        }
                        f_sku_values_3dr {
                          property {
                            id
                          }
                          value {
                            id
                          }
                        }
                        id
                      }
                      product {
                        id
                        f__draft_0ht
                        f__archived_0ht
                        f_name_
                        f_sku_properties_3dr {
                          id
                          name
                          enum {
                            id
                            name
                            slug
                          }
                        }
                      }
                      id
                      rowTotal {
                        value
                        unit
                        decimalValue
                        string
                      }
                      subscriptionFrequency
                      subscriptionInterval
                      subscriptionTrial
                    }
                    userItemsCount
                  }
                }
                site {
                  id
                  commerce {
                    businessAddress {
                      country
                    }
                    defaultCountry
                    defaultCurrency
                    quickCheckoutEnabled
                  }
                }
              }
              " data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper"><a href="#" data-node-type="commerce-cart-open-link" class="w-commerce-commercecartopenlink cart-button w-inline-block"><svg class="w-commerce-commercecartopenlinkicon cart-icon" width="17px" height="17px" viewBox="0 0 17 17"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M2.60592789,2 L0,2 L0,0 L4.39407211,0 L4.84288393,4 L16,4 L16,9.93844589 L3.76940945,12.3694378 L2.60592789,2 Z M15.5,17 C14.6715729,17 14,16.3284271 14,15.5 C14,14.6715729 14.6715729,14 15.5,14 C16.3284271,14 17,14.6715729 17,15.5 C17,16.3284271 16.3284271,17 15.5,17 Z M5.5,17 C4.67157288,17 4,16.3284271 4,15.5 C4,14.6715729 4.67157288,14 5.5,14 C6.32842712,14 7,14.6715729 7,15.5 C7,16.3284271 6.32842712,17 5.5,17 Z" fill="currentColor" fill-rule="nonzero"></path></g></svg>
                <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D" class="w-commerce-commercecartopenlinkcount cart-quantity"></div></a><div data-node-type="commerce-cart-container-wrapper" style="display:none" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar"><div data-node-type="commerce-cart-container" class="w-commerce-commercecartcontainer"><div class="w-commerce-commercecartheader"><h4 class="w-commerce-commercecartheading">Your Order</h4><a href="#" data-node-type="commerce-cart-close-link" class="w-commerce-commercecartcloselink w-inline-block"><svg width="16px" height="16px" viewBox="0 0 16 16"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g fill-rule="nonzero" fill="#333333"><polygon points="6.23223305 8 0.616116524 13.6161165 2.38388348 15.3838835 8 9.76776695 13.6161165 15.3838835 15.3838835 13.6161165 9.76776695 8 15.3838835 2.38388348 13.6161165 0.616116524 8 6.23223305 2.38388348 0.616116524 0.616116524 2.38388348 6.23223305 8"></polygon></g></g></svg></a></div><div class="w-commerce-commercecartformwrapper"><form data-node-type="commerce-cart-form" style="display:none" class="w-commerce-commercecartform"><script type="text/x-wf-template" id="wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4be4">%3Cdiv%20class%3D%22w-commerce-commercecartitem%22%3E%3Cimg%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%252C%257B%2522alt%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_price_%2522%257D%257D%255D%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4bea%22%3E%253Cli%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4bea%22%3E%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22remove-button%20w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%3E%3Cdiv%20class%3D%22text-block-2%22%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20type%3D%22text%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartquantity%22%20name%3D%22quantity%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E</script>
                  <div class="w-commerce-commercecartlist" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-33c883c6-4afc-cc73-3bca-d2857a9d4be4"></div><div class="w-commerce-commercecartfooter"><div class="w-commerce-commercecartlineitem cart-line-item"><div></div><div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D" class="w-commerce-commercecartordervalue text-block"></div></div><div><div data-node-type="commerce-cart-quick-checkout-actions" style="display:none"><a data-node-type="commerce-cart-apple-pay-button" style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat" class="w-commerce-commercecartapplepaybutton apple-pay"><div></div></a><a data-node-type="commerce-cart-quick-checkout-button" style="display:none" class="w-commerce-commercecartquickcheckoutbutton"><svg class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16"><defs><polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon><polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon></defs><g fill="none" fill-rule="evenodd"><path fill="#4285F4" d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469"></path><path fill="#34A853" d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16"></path><g transform="translate(0 4)"><mask id="google-mark-b" fill="#fff"><use xlink:href="#google-mark-a"></use></mask><path fill="#FBBC04" d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337" mask="url(#google-mark-b)"></path></g><mask id="google-mark-d" fill="#fff"><use xlink:href="#google-mark-c"></use></mask><path fill="#EA4335" d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291" mask="url(#google-mark-d)"></path></g></svg><svg class="w-commerce-commercequickcheckoutmicrosofticon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><g fill="none" fill-rule="evenodd"><polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon><polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon><polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon><polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon></g></svg><div>Pay with browser.</div></a></div><a href="/checkout" value="Continue to Checkout" data-node-type="cart-checkout-button" class="w-commerce-commercecartcheckoutbutton checkout-button" data-loading-text="Hang Tight...">Continue to Checkout</a></div></div></form><div class="w-commerce-commercecartemptystate empty-state"><div>We couldn't find any items in your cart.</div><div class="button-arrow-wrap"><a href="order.html" class="button w-button">Start an Order</a><img src="https://assets.website-files.com/5e865e09d8efa3310676b585/5e865e09d8efa3672576b5ef_Drawn%20Arrow.svg" alt="" class="arrow-drawn"></div></div><div style="display:none" data-node-type="commerce-cart-error" class="w-commerce-commercecarterrorstate"><div class="w-cart-error-msg" data-w-cart-quantity-error="Product is not available in this quantity." data-w-cart-general-error="Something went wrong when adding this item to the cart." data-w-cart-checkout-error="Checkout is disabled on this site." data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue." data-w-cart-subscription_error-error="Cart failed.">Product is not available in this quantity.</div></div></div></div></div></div>
        </div>
    </div>
</div>
<div class="w-nav-overlay" data-wf-ignore=""></div>
<div class="title-wrap-centre"><h1 style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); opacity: 1; transform-style: preserve-3d;" class="header-h1"><span class="brand-span"></span></h1></div>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <div class="flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-blue-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
        </div>
          <h3 class="text-2xl font-bold text-center">Login to your account</h3>
        <form action="login.php" method="post">
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                            <input type="text" placeholder="Email" name="email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                  </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" placeholder="Password" name="password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex items-baseline justify-between">
                    <button class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
                    <a href="signup.html" class="text-sm text-blue-600 hover:underline">Create Account</a>
                </div>
            </div>
        </form>
 <?php
        }
    } else {
        return false;
    }
}

?>