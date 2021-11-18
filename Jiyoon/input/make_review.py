import random

import pandas as pd
import numpy as np

num = 15
data = np.array([0 for x in range(num)])
reviews = pd.Series(data)

import secrets


award = ['Best Service Award', 'Best Taste Award', 'Best Rating Award']
award_by = ['Richmond Award', 'Lux Award', 'The Post Food Review', 'New York Times']
award_for = [
    'Good taste in 90% of dishes. Especially their main course is delicious',
    'Customers always say that this place is clean and tidy',
    'Not the best but definitely good. Plates are plentiful and the views are fantastic. Very touristy but for a reason',
    "I'm in love with this place- they make a perfect sidecar as well as martinis.",
    "Love their food and their cute decor Service is good too, house wine decent. Their risotto will make you sooooo happy.",
    "Overall a pricey restaurant but food was very worth it.",
    'Pays attention to each customer all the time.',
    'All the dishes were incredibly flavorful and there was so much variety.',
    "I'm still thinking about them . I can't wait to come back! "
]


INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 2, 'Lux Award', 'Good taste in 90% of dishes. Especially their main course is delicious', 2021);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 33, 'New York Times', 'All the dishes were incredibly flavorful and there was so much variety.', 2010);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 42, 'The Post', 'Customers always say that this place is clean and tidy', 2020);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 22, 'Lux Award', 'Good taste in 90% of dishes. Especially their main course is delicious', 2021);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 12, 'New York Times', "I'm in love with this place- they make a perfect sidecar as well as martinis.", 2019);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 1, 'The Post', "Overall a pricey restaurant but food was very worth it.", 2017);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 2, 'Lux Award', 'Pays attention to each customer all the time.', 2013);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 54, 'Lux Award', 'Good taste in 90% of dishes. Especially their main course is delicious', 2012);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 43, 'New York Times', "I'm in love with this place- they make a perfect sidecar as well as martinis.", 2011);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 46, 'The Post', 'Not the best but definitely good. Plates are plentiful and the views are fantastic. Very touristy but for a reason', 2007);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 68, 'New York Times', 'Customers always say that this place is clean and tidy', 2008);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 74, 'Lux Award', 'All the dishes were incredibly flavorful and there was so much variety.', 2006);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 45, 'The Post', 'Customers always say that this place is clean and tidy', 2010);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 24, 'New York Times', 'Not the best but definitely good. Plates are plentiful and the views are fantastic. Very touristy but for a reason', 2009);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 22, 'Lux Award', 'Good taste in 90% of dishes. Especially their main course is delicious', 2021);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 12, 'New York Times', 'All the dishes were incredibly flavorful and there was so much variety.', 2010);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 55, 'The Post', 'Customers always say that this place is clean and tidy', 2020);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Service Award', 59, 'Lux Award', 'Good taste in 90% of dishes. Especially their main course is delicious', 2021);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 40, 'New York Times', "I'm in love with this place- they make a perfect sidecar as well as martinis.", 2019);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 84, 'The Post', "Overall a pricey restaurant but food was very worth it.", 2017);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 86, 'Lux Award', 'Pays attention to each customer all the time.', 2013);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 76, 'Lux Award', 'Good taste in 90% of dishes. Especially their main course is delicious', 2012);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Taste Award', 66, 'New York Times', "I'm in love with this place- they make a perfect sidecar as well as martinis.", 2011);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 63, 'The Post', 'Not the best but definitely good. Plates are plentiful and the views are fantastic. Very touristy but for a reason', 2007);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 39, 'New York Times', 'Customers always say that this place is clean and tidy', 2008);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 35, 'Lux Award', 'All the dishes were incredibly flavorful and there was so much variety.', 2006);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 9, 'The Post', 'Customers always say that this place is clean and tidy', 2010);
INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES ('Best Rating Award', 23, 'New York Times', 'Not the best but definitely good. Plates are plentiful and the views are fantastic. Very touristy but for a reason', 2009);





award_year = [x for x in range(2000, 2021)]
reviews['award'] = np.array([secrets.choice(award) for x in range(num)])
reviews['award_by'] = np.array([secrets.choice(award_by) for x in range(num)])
reviews['award_for'] = np.array([secrets.choice(award_for) for x in range(num)])
reviews['award_year'] = np.array([secrets.choice(award_year) for x in range(num)])
reviews['rest_id'] = np.array([random.randint(1, 100) for x in range(num)])

# food = []
# for i in range(10):
#     food.append(input('review'))

# reviews['name'] = np.array([0 for x in range(num)])
# for i in range(num):
#     food_list = ""
#     for j in food[i]:
#         food_list+= j+' '
#     reviews['food'][i] =food_list
print(reviews)
# save = reviews.loc[:, ['award', 'rest_id', 'award_by','award_for']]
# save.to_csv('rest_review.csv', index=False)
