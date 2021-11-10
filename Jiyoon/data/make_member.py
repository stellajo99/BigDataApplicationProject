import os
def read_names(gender = "girl"):
    names_list = []
    dir = os.getcwd()
    # os.chdir("../data")
    file = open(gender+"_names.txt", "r")

    with open(gender+"_names.txt", "r") as f:
        content = f.readlines()
    # you may also want to remove whitespace characters like `\n` at the end of each line
    content = [x.strip().lower() for x in content]
    # print(content)
    return content

names= read_names()

import uuid
import pandas as pd
import numpy as np

# id = uuid.uuid1()
# members = pd.Series(index = names)
# # members['id'] = pd.Series(np))
# # members['first'] =names
# members['id'] = pd.Series(np.random.uniform(low=0, high=5, size=(1000,)))
# print(members)


# Generate password
import secrets
import string

password_list = []
for i in range(1000):
    alphabet = string.ascii_letters + string.digits
    password = ''.join(secrets.choice(alphabet) for i in range(7))  # for a 20-character password
    password_list.append(password)
print(password_list)