import sys
import random
from datetime import datetime

def generator(name='',maximum=50, myk=5, size=1):

	date = datetime.today().strftime('%d-%m-%Y')

	print()

	url = '/kunden/homepages/9/d966702636/htdocs/dream/dreams2/dreams3/'
	f = open(url+name+'-'+date+'-mytirages.txt', "w")

	for i in range(size):
		random.seed(random.randrange(19191900))
		#r = random.randrange(19191900)

		#while(r not in [1,2,3,9,19,27,5,88,57,56,51,49,62,78,70,8,9,18,25,11,35,26]):
		g = random.sample(list(range(1,maximum)), k=myk)
		g.sort()
		#r = random.randrange(19191900)

		f.write(str(g)+'\n')

def main():

	if(len(sys.argv)>=2):
		if(sys.argv[1] == '-ed'):
			generator('eurodreams',41,10,10)
		elif(sys.argv[1] == '-l'):
			generator('loto',50,10,10)
		elif(sys.argv[1] == '-em'):
			generator('euromillions',51,10,10)
		else:
			print(sys.argv[1],' not reconized option; Try with -ed or -l or -em')
			exit()
	else:
		print('Missing option; Try with -ed or -l or -em')
		exit()


if __name__ == "__main__":
    main()
