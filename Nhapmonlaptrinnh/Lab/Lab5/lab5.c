#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
	int chonso;
	do{
		printf("+\n==========Menu========+");
		printf("\n1. Thong tin gia dinh");
		printf("\n2. so min, so max ");
		printf("\n3. Xep loai nhan vien");
		printf("\n0. Thoat");
		printf("\n+==========Exit========+");
		printf("\nMoi nhap so: ");
		scanf("%d", &chonso);
		switch(chonso){
			case 0:
				exit(0);break;
			case 1:
				Bai1();
				break;
			case 2:
				Bai2();
				break;
			case 3:
				Bai3();
				break;
			default:
				printf("Nhap sai so");
		}
	}while(chonso!=0);
}
void Bai1(){
	char hotenbo[50],hotenme[50],hoten[50];
	int tuoibo, tuoime,tuoi;
	printf("Nhap ho ten bo:");
	fflush(stdin);gets(hotenbo);
	printf("Nhap tuoi bo:");
	scanf("%d",&tuoibo);
	printf("Nhap ho ten me:");
	fflush(stdin);gets(hotenme);
	printf("Nhap tuoi me:");
	scanf("%d",&tuoime);
    printf("Nhap ho ten anh/chi em:");
	fflush(stdin);gets(hoten);
	printf("Nhap tuoi anh/chi em:");
	scanf("%d",&tuoi);   
	printf("\n+======Thong tin gia dinh========+");
	printf("\nHo ten bo: %s",hotenbo);
	printf("\nTuoi: %d",tuoibo);
	printf("\nHo ten me: %s",hotenme);
	printf("\nTuoi: %d",tuoime);
	printf("\nHo ten anh/chi em(neu co): %s",hoten);
	printf("\nTuoi: %d",tuoi);
}
void Bai2(){
	int a,b,c,max,min,i;
	printf("\nNhap so a:");
	scanf("%d",&a);
	printf("\nNhap so b:");
	scanf("%d",&b);
	printf("\nNhap so c:");
	scanf("%d",&c);
	max=a;
	if(b>max){
		max=b;
	}else if(max<c){
		max=c;
	}else if(max<c<b){
		max=b;
	}
	printf("\nSo lon nhat la: %d",max);
	min=b;
	if(min>a){
		min=a;
	}else if(min>c){
		min=c;
	}else if(min>c>a){
		min=a;
	}
	printf("\nSo nho nhat la: %d",min);
}
void Bai3(){
	int tuoinhanvien;
	printf("\nNhap tuoi nhan vien:");
	scanf("%d",&tuoinhanvien);
	if(tuoinhanvien<18){
		printf("\nTuoi tre",tuoinhanvien);
	}else if(tuoinhanvien>18 && tuoinhanvien<60){
		printf("\nTuoi lao dong",tuoinhanvien);
	}else{
		printf("\nTuoi gia",tuoinhanvien);
	}
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
