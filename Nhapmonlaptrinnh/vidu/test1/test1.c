#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void bai1();
void bai2();

void menu(){
	int chonso;
	do{
		printf("\n+=====Menu=======+");
		printf("\n1.Thong tin ca nhan");
		printf("\n2.Xu ly so n");
		printf("\n0.Thoat");
		printf("+======End======+");
		printf("\nMoi ban nhap so tu 0 den 2:");
		scanf("%d",&chonso);
		switch(chonso){
			case 0:
				exit(0);break;
			case 1:
				bai1();break;
			case 2:
				bai2();break;
			default:
				printf("\nNhap saiso");
		}
	}while(chonso!=0);
}
void bai1(){
	char hoten[50],masv[50];
	int diem;
	printf("\nNhap ho ten:");
	fflush(stdin);gets(hoten);
	printf("\nNhap ma sv:");
	fflush(stdin);gets(masv);
	printf("\nNhap diem:");
	scanf("%d",&diem);
	printf("+----Thong tin ca nhan-----+");
	printf("\nHo ten: %s",hoten);
	printf("\nMa sv: %s",masv);
	printf("\nDiem: %d",diem);
}
void bai2(){
	int n,i=0;
	printf("\nNhap so n=");
	scanf("%d",&n);
	if(i<n){
		i+i++;
	}
	printf("\nTong cac so nho hon n la:",i);
	if(n%2==0){
		printf("\n%d la so chan",n);
	}else{
		printf("\n%d la so le",n);
	}
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
