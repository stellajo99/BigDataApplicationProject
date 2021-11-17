# Using readlines()
file1 = open('rest_country.txt', 'r')
Lines = file1.readlines()

count = 0
# Strips the newline character
for line in Lines:
    count += 1
    line = line.strip()
    # print("insert into restaurant values({});".format(line.strip()))
    line = line.split(',')
    # print(line)
    print('insert into restaurant values(NULL,"{}","{}","{}",{},{}, "{}", {});'.format(line[0], line[1], line[2], float(line[3])/20, float(line[4]), line[6], int(line[7])))

