#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	char hoten[50];
	int tuoi;
	char diachi[150];
	printf("nhap ho ten:");
	fflush(stdin);gets(hoten);
	printf("nhap diachi:");
	fflush(stdin);gets(diachi);
	printf("nhap tuoi:");
	scanf("%d",&tuoi);
	printf("\n+======Thong tin ca nhan======+");
	printf("\nHo ten: %s",hoten);
	printf("\nDia chi: %s",diachi);
	printf("\nTuoi: %d",tuoi);
	return 0;
}
