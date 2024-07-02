#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
	int luachon;
	do{
		printf("\n==============MENU==================\n");
		printf("\n1. Thong tin ca nhan");
		printf("\n2. tuoi nhan vien");
		printf("\n3. Thong tin vat nuoi");
		printf("\n0. Thoat");
		printf("\n=======================================\n");
		printf("\nNhap lua chon cua ban: ");
		scanf("%d", &luachon);
		switch(luachon){
			case 0:
				exit(0);break;
			case 1:
				bai1();break;
			case 2:
				bai2();break;
			case 3:
				bai3();break;
			default:
				printf("\nLua chon sai. Moi lua chon lai");
		}
	}while(luachon!=0);
}
void bai1(){
}
void bai2(){
}
void bai3(){
	int mang[100],n,i;
	printf("\nNhap so luong con vat: ");
	scanf("%d",&n);
	for(i=1;i<=n;i++){
		printf("\nNhap can nang cho con vat %d: ",i);
		scanf("%d",&mang[i]);
	}
	int dem=0;
	for(i=1;i<=n;i++){
		if(mang[i]>30){
			dem=dem+1;
		}
	}printf("\ndem so luong con vat tren 30kg la: %d",dem);
	int vtmin=0,min=mang[1];
	for(i=1;i<=n;i++){
		if(mang[i]<min){
			min=mang[i];
			vtmin=i;
		}
	}printf("\nVi tri con vat co can nang nho nhat la: %d",vtmin);
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
