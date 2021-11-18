import pandas as pd
import numpy as np
reviews = pd.read_csv('rest.csv', sep=',', encoding = 'unicode_escape')


# print(reviews.loc[:,['Name', 'Cuisine']])
import secrets

foo = ['Korean', 'Japanese', 'Chinese', 'Western', 'Dessert']
Korean = ['Bibimbap', 'Bulgogi', 'Japche', 'Tteokbokki']
Japanese = ['Sushi', 'Donburi', 'Ramen', 'Tempura', 'Omuraisu', 'Udon']
Chinese = ['Dumplings', 'SpringRoll', 'Dimsum', 'Wontons']
Western = ['Salad', 'Hamburger','Sandwich', 'Pizza', 'Steak']
Dessert = ['Cupcake', 'Donut', 'Cookie','Brownies']

reviews['country'] = np.array([secrets.choice(foo) for x in range(reviews.shape[0])])
food = []
for i in range(len(reviews['country'])):
    if reviews.country[i] == 'Korean':
        food.append([secrets.choice(Korean) for x in range(2)])
    elif reviews.country[i] == 'Japanese':
        food.append([secrets.choice(Japanese) for x in range(2)])
    elif reviews.country[i] == 'Chinese':
        food.append([secrets.choice(Chinese) for x in range(2)])
    elif reviews.country[i] == 'Western':
        food.append([secrets.choice(Western) for x in range(2)])
    elif reviews.country[i] == 'Dessert':
        food.append([secrets.choice(Dessert) for x in range(2)])
print(food)
reviews['food'] = np.array([0 for x in range(reviews.shape[0])])
for i in range(len(reviews['country'])):
    food_list = ""
    for j in food[i]:
        food_list+= j+' '
    reviews['food'][i] =food_list
# print(reviews)
save = reviews.loc[:, ['Name', 'Location', 'country','Price for 2', 'Dining Rating', 'Delivery Rating', 'food', 'Dining Rating Count']]
save.to_csv('rest_country.csv', index=False)
