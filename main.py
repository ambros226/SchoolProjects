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


def smallest_price():
    try:
        min_products = []
        min_price=list(products)[0]['price']
        for product in products:

            if product['price'] < min_price:
                min_products = []
                min_products.append({'name': product['name'], 'price': product['price']})
                min_price=product['price']

            elif product['price'] == min_price:
                min_products.append({'name': product['name'], 'price': product['price']})

    except IndexError:
        print("Nebyl nalezen žádný produkt")
    except TypeError:
        print(f"U pruduktu {product['name']} není price číslo")

    for product in min_products:
        print(f"{product['name']}: {product['price']}")


def sum_price():
    sum = 0
    for product in products:
        try:
            sum += product['price']
        except TypeError:
            print(f"U pruduktu {product['name']} není price číslo")

    print(sum)

def average_price():
    avarage = 0
    av_sum=0
    av_count=0
    for product in products:
        try:
            av_sum += product['price']
            av_count += 1
        except TypeError:
            print(f"U pruduktu {product['name']} není price číslo")
    avarage = av_sum/av_count
    print(avarage)


def menu():
    print("Vítej ve skladu")
    print("###############\n")
    print("1. Výpis položek")
    print("2. Přidání položky")
    print("3. Celková cena")
    print("4. Pruměrná cena")
    print("5. Nejlevnějí produkt\n")


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
        print("Celková cena:")
        sum_price()
        print("")
        menu()
    elif choice == 4:
        print("Průměr ceny:")
        average_price()
        print("")
        menu()
    elif choice == 5:
        print("Nejlevnějí produkt:")
        smallest_price()
        print("")
        menu()

    else:
        print("Zadal jsi špatně!\n")
        menu()


menu()
