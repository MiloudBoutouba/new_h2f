import timeit
import random
#import numpy as np
import sys
import datetime

def two_eq_loto():

	print( datetime.date.today().strftime('%d-%b-%Y'), ' ***L***')

	first = random.sample(list(range(1,50)),k=5)
	first.sort()
	first.append(random.randrange(1,11))
	
	second = random.sample(list(range(1,50)),k=5)
	second.sort()
	second.append(random.randrange(1,11))
	
	counter = 0
	
	start = timeit.default_timer()
	while(second != first):
		counter+=1
		stop = timeit.default_timer()
		#if(counter%1000000==0): print(counter,' done nothing found yet...(time spend since : ',stop-start,' seconds)')
	
		first = random.sample(list(range(1,50)),k=5)
		first.sort()
		first.append(random.randrange(1,11))
		
		second = random.sample(list(range(1,50)),k=5)
		second.sort()
		second.append(random.randrange(1,11))
	
	print(first)
	print(random.choices(list(range(-10,+11)),k=6))
	#print(second)

def two_eq_euroDreams():

	print( datetime.date.today().strftime('%d-%b-%Y'), ' ***ED***')

	first = random.sample(list(range(1,41)),k=6)
	first.sort()
	first.append(random.randrange(1,6))
	
	second = random.sample(list(range(1,41)),k=6)
	second.sort()
	second.append(random.randrange(1,6))
	
	counter = 0
	
	start = timeit.default_timer()
	while(second != first):
		counter+=1
		stop = timeit.default_timer()
		#if(counter%1000000==0): print(counter,' done nothing found yet...(time spend since : ',stop-start,' seconds)')

		first = random.sample(list(range(1,41)),k=6)
		first.sort()
		first.append(random.randrange(1,6))

		second = random.sample(list(range(1,41)),k=6)
		second.sort()
		second.append(random.randrange(1,6))
	
	print(first)
	print(random.choices(list(range(-10,+11)),k=7))
	#print(second)


def two_eq_euroMillions():

	print( datetime.date.today().strftime('%d-%b-%Y'), ' ***EM***')

	first = random.sample(list(range(1,51)),k=5)
	first.sort()
	first.append(random.sample(list(range(1,13)),k=2))

	second = random.sample(list(range(1,51)),k=5)
	second.sort()
	second.append(random.sample(list(range(1,13)),k=2))

	counter = 0
	
	start = timeit.default_timer()
	while(second != first):
		counter+=1
		stop = timeit.default_timer()
		#if(counter%1000000==0): print(counter,' done nothing found yet...(time spend since : ',stop-start,' seconds)')

		first = random.sample(list(range(1,51)),k=5)
		first.sort()
		first.append(random.sample(list(range(1,13)),k=2))
	
		second = random.sample(list(range(1,51)),k=5)
		second.sort()
		second.append(random.sample(list(range(1,13)),k=2))
		
	print(first)
	print(random.choices(list(range(-10,+11)),k=7))
	##print(second)

def main():

	if(len(sys.argv)>=2):
		if(sys.argv[1] == '-ed'):
			two_eq_euroDreams()
		elif(sys.argv[1] == '-l'):
			two_eq_loto()
		elif(sys.argv[1] == '-em'):
			two_eq_euroMillions()
		else:
			print(sys.argv[1],' not reconized option; Try with -ed or -l or -em')
			exit()
	else:
		print('Missing option; Try with -ed or -l or -em')
		exit()


if __name__ == "__main__":
    main()