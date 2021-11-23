@section('components.Scripts')
    <!-- JavaScript files-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>

    <script type="text/javascript">
      /*<![CDATA[*/
      (function () {
        var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
        if (window.ShopifyBuy) {
          if (window.ShopifyBuy.UI) {
            ShopifyBuyInit();
          } else {
            loadScript();
          }
        } else {
          loadScript();
        }

        function loadScript() {
          var script    = document.createElement('script');
          script.async  = true;
          script.src    = scriptURL;
          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
          script.onload = ShopifyBuyInit;
        }

        function ShopifyBuyInit() {
          var client = ShopifyBuy.buildClient({
            domain: 'anacaren-gtz.myshopify.com',
            storefrontAccessToken: 'fc0e0e33ad9c44fc747fb0a0c5804bd5',
          });

          ShopifyBuy.UI.onReady(client).then(function (ui) {
            ui.createComponent('product', {
              id: '7345115627763',
              node: document.getElementById('product-component-1635017265656'),
              moneyFormat: '%24%20%7B%7Bamount%7D%7D',
              options: {
                "product": {
                  "styles": {
                    "product": {
                      "@media (min-width: 601px)": {
                        "max-width": "calc(25% - 20px)",
                        "margin-left": "20px",
                        "margin-bottom": "50px"
                      }
                    },
                    "title": {
                      "font-family": "Montserrat, sans-serif"
                    },
                    "button": {
                      "font-family": "Montserrat, sans-serif",
                      ":hover": {
                        "background-color": "#a38acb"
                      },
                      "background-color": "#b599e2",
                      ":focus": {
                        "background-color": "#a38acb"
                      },
                      "border-radius": "15px"
                    },
                    "price": {
                      "font-family": "Montserrat, sans-serif"
                    },
                    "compareAt": {
                      "font-family": "Montserrat, sans-serif"
                    },
                    "unitPrice": {
                      "font-family": "Montserrat, sans-serif"
                    }
                  },
                  "contents": {
                    "button": false,
                    "buttonWithQuantity": true
                  },
                  "text": {
                    "button": "Agregar al carrito"
                  },
                  "googleFonts": [
                    "Montserrat"
                  ]
                },
                "productSet": {
                  "styles": {
                    "products": {
                      "@media (min-width: 601px)": {
                        "margin-left": "-20px"
                      }
                    }
                  }
                },
                "modalProduct": {
                  "contents": {
                    "img": false,
                    "imgWithCarousel": true,
                    "button": false,
                    "buttonWithQuantity": true
                  },
                  "styles": {
                    "product": {
                      "@media (min-width: 601px)": {
                        "max-width": "100%",
                        "margin-left": "0px",
                        "margin-bottom": "0px"
                      }
                    },
                    "button": {
                      "font-family": "Montserrat, sans-serif",
                      ":hover": {
                        "background-color": "#a38acb"
                      },
                      "background-color": "#b599e2",
                      ":focus": {
                        "background-color": "#a38acb"
                      },
                      "border-radius": "15px"
                    },
                    "title": {
                      "font-family": "Helvetica Neue, sans-serif",
                      "font-weight": "bold",
                      "font-size": "26px",
                      "color": "#4c4c4c"
                    },
                    "price": {
                      "font-family": "Helvetica Neue, sans-serif",
                      "font-weight": "normal",
                      "font-size": "18px",
                      "color": "#4c4c4c"
                    },
                    "compareAt": {
                      "font-family": "Helvetica Neue, sans-serif",
                      "font-weight": "normal",
                      "font-size": "15.299999999999999px",
                      "color": "#4c4c4c"
                    },
                    "unitPrice": {
                      "font-family": "Helvetica Neue, sans-serif",
                      "font-weight": "normal",
                      "font-size": "15.299999999999999px",
                      "color": "#4c4c4c"
                    }
                  },
                  "googleFonts": [
                    "Montserrat"
                  ],
                  "text": {
                    "button": "Add to cart"
                  }
                },
                "option": {},
                "cart": {
                  "styles": {
                    "button": {
                      "font-family": "Montserrat, sans-serif",
                      ":hover": {
                        "background-color": "#a38acb"
                      },
                      "background-color": "#b599e2",
                      ":focus": {
                        "background-color": "#a38acb"
                      },
                      "border-radius": "15px"
                    }
                  },
                  "text": {
                    "title": "Carrito de compras",
                    "total": "Subtotal",
                    "empty": "Tu carrito está vacío",
                    "notice": "Envío y códigos de descuentos son agregados al comprar.",
                    "button": "Comprar",
                    "noteDescription": "Instrucciones especiales para el vendedor"
                  },
                  "contents": {
                    "note": true
                  },
                  "popup": false,
                  "googleFonts": [
                    "Montserrat"
                  ]
                },
                "toggle": {
                  "styles": {
                    "toggle": {
                      "font-family": "Montserrat, sans-serif",
                      "background-color": "#b599e2",
                      ":hover": {
                        "background-color": "#a38acb"
                      },
                      ":focus": {
                        "background-color": "#a38acb"
                      }
                    }
                  },
                  "googleFonts": [
                    "Montserrat"
                  ]
                }
              },
            });
          });
        }
      })();
      /*]]>*/
    </script>

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    @yield('scripts')
@endsection