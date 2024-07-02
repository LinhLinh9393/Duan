#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int chon;
	do{
		printf("+----Menu----+\n");
		printf("1. Tinh trung binh cong cac so chia het cho 2");
		printf("\n2. Kiem tra so Nguyen to");
		printf("\n3. Kiem tra so Chinh phuong");
		printf("\n4. In ra bang cuu chuong so 2");
		printf("\n0. Thoat");
		printf("\n+----End----+");
		
	}while(chon!=0);
	return 0;
}
