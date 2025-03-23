products = [
    {
        "name": "Audi",
        "price": 50
    },
    {
        "price": 30,
        "name": "BMW",
    }
]


def print_products():
    for product in products:
        print(f"Název produktu2: {product['name']}, cena: {product['price']}$")


def add_product():
    product_name = input("Název produktu:")
    product_price = input("Název cenu:")
    product2 = {
        'name': product_name,
        'price': product_price
    }

    products.append(product2)
def sum_price():
    sum = 0
    for product in products:
        try:
            sum += product['price']
        except TypeError:
            print(f"U pruduktu {product['name']} není price číslo")

    print(sum)


def menu():
    print("Vítej ve skladu")
    print("###############\n")
    print("1. Výpis položek")
    print("2. Přidání položky")
    print("3. Celková suma\n")

    choice = int(input("Volba: "))

    if choice == 1:
        print("Položky na skladě jsou:")
        print_products()
        print("")
        menu()

    elif choice == 2:
        print("Přidání poožky:")
        add_product()
        print("")
        menu()

    elif choice == 3:
        print("Celková suma:")
        sum_price()
        print("")
        menu()

    else:
        print("Zadal jsi špatně!\n")
        menu()


menu()
