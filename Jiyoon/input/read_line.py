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
    print('INSERT INTO restaurant (name,location,country,avg_price,avg_rating,menu,review_count) values ("{}", "{}", "{}", {}, {}, "{}", {});'.format(line[0], line[1], line[2], float(line[3])/20, float(line[4]), line[6].split()[0], int(line[7])))

