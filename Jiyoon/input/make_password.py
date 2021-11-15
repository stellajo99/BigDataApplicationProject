# Generate password
import secrets
import string

password_list = []
for i in range(1000):
    alphabet = string.ascii_letters + string.digits
    password = ''.join(secrets.choice(alphabet) for i in range(7))  # for a 20-character password
    password_list.append(password)
print(password_list)


textfile = open("data/pre_password_file.txt", "w")
for element in password_list:
    textfile.write(element + "'],['")
textfile.close()