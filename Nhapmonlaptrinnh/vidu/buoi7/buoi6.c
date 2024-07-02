#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
//ham khong co gia tri tra ve
void tong1(int a, int b){
	printf("\nTong so 1 la: %d",a+b);
}

//ham co gia tri tra ve
int tong2(int a, int b){
	int tong=a+b;
	return tong;
}
int main(int argc, char *argv[]) {
	tong1(4,5);
	printf("\nTong so 2: %d",tong2(7,8));
	
	return 0;
}
