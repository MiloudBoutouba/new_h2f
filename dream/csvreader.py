import csv
rows = []
with open("loto.csv", 'r') as file:
    csvreader = csv.reader(file, delimiter=';')
    for row in csvreader:
        rows.append(row)

#print(rows)
print(rows[0])
print(rows[0][0])
