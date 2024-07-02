#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
	int chonso;
	do{
		printf("\n+========Menu========+");
		printf("\n1. Thong tin mon hoc");
		printf("\n2. Luong khi ra truong");
		printf("\n3. Thong tin ve cac thanh vien trong lop");
		printf("\n0. Thoat");
		printf("\n+=======End==========+");
		printf("\nNhap so tu 0 den 3: ");
		scanf("%d",&chonso);
		switch(chonso){
			case 0:
				exit(0);break;
			case 1:
				bai1();break;
			case 2:
				bai2();break;
			case 3:
				bai3();break;
			default:
				printf("\nNhap sai so moi nhap lai");		
		}
	}while(chonso!=0);
}
void bai1(){
	char tenmon[100],tengiangvien[100];
	int sotinchi, diem;
	printf("\nNhap ten mon hoc: ");
	fflush(stdin);gets(tenmon);
	printf("\nNhap ten giang vien: ");
	fflush(stdin);gets(tengiangvien);
	printf("\nNhap so tin chi: ");
	scanf("%d",&sotinchi);
	printf("\nNhap diem mong muon cua mon Lap trinh C: ");
	scanf("%d",&diem);
	printf("\n--------Thong tin mon hoc-------");
	printf("\nTen mon hoc: %s",tenmon);
	printf("\nTen giang vien: %s",tengiangvien);
	printf("\nSo tin chi: %d",sotinchi);
	printf("\nDiem mong muon cua mon Lap trinh C: %d",diem);
}
void bai2(){
	int luong;
	printf("\nNhap so luong: ");
	scanf("%d",&luong);
	if(luong>25){
		printf("\nNo luc het minh");
	}else if(luong>15){
		printf("\nCan co gang");
	}else if(luong>8){
		printf("\nCham chi");
	}else if(luong>0){
		printf("\nKho co nguoi yeu");
	}else{
		printf("\nNhap sai du lieu");
	}
}
void bai3(){
	int mang[100],n,i;
	printf("\nNhap so luong sv: ");
	scanf("%d",&n);
	for(i=1;i<=n;i++){
		printf("\nCan nang tung sinh vien %d: ",i);
		scanf("%d",&mang[i]);
	}
	printf("\n-----Thong tin ve cac sinh vien trong lop------");
	printf("\nSo luong sinh vien la: %d",n);
	int dem=0;
	for(i=1;i<=n;i++){
		if(mang[i]>50){
			dem=dem+1;
		}
	}
	printf("\nSo luong sinh vien >50kg la: %d",dem);
	int vtmin=0;
	int min=mang[0];
	for(i=1;i<=n;i++){
		if(mang[i]<min){
			vtmin=i;
			min=mang[i];
		}
	}
	printf("\nVi tri sv co can nang min la: %d",vtmin);
	int tong=0;
	for(i=1;i<=n;i++){
		tong=tong+mang[i];
	}
	float tb;
	tb=tong/n;
	printf("\nTrung binh can nang cua cac sinh vien la: %.2f",tb);
	for(i=1;i<=n;i++){
		if(mang[i]%2==0){
			printf("\nSinh vien co can nang chan la: %d",mang[i]);
		}
	}
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
