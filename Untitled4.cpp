#include <stdio.h>
#include <stdlib.h>
#include <string.h>
/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	char input[1000];
	char buffer[5] = {0};
	int i=0;
	for(i=0;i<1000;i++)
	{
		input[i] = 5;
	}
	strcpy(buffer,input);
	system("pause");
	return 0;
}
