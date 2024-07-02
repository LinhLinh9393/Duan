#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
	int chon;
	do{
		printf("\n+========MENU========+");
		printf("\n1. Thong tin may tinh");
		printf("\n2. Do truot");
		printf("\n3. Thong tin lop CNTT");
		printf("\n0. Thoat");
		printf("\n+========END========+");
		printf("\nNhap so tu 0 den 3: ");
		scanf("%d",&chon);
		switch(chon){
			case 0:
				exit(0);break;
			case 1:
				bai1();break;
			case 2:
				bai2();break;
			case 3:
				bai3();break;
			default:
				printf("\nNhap sai so moi nhap lai.");		
		}
	}while(chon!=0);
}
void bai1(){
	char ten[100],hang[100];
	int giatien;
	printf("\nNhap ten may tinh: ");
	fflush(stdin);gets(ten);
	printf("\nNhap hang may tinh: ");
	fflush(stdin);gets(hang);
	printf("\nNhap gia tien: ");
	scanf("%d",&giatien);
	printf("\n--------Thong tin may tinh-------");
	printf("\nTen may tinh: %s",ten);
	printf("\nHang may tinh: %s",hang);
	printf("\nGia tien: %d",giatien);
}
void bai2(){
	int n;
	printf("\nNhap so n= ");
	scanf("%d",&n);
	int i;
	int tong=0;
	for(i=0;i<n;i++){
	    tong=tong+i;
	}
	printf("\nTong cac so nho hon n la: %d",tong);
	if(n%2==0){
		printf("\n%d la so chan",n);
	}else{
		printf("\n%d la so le",n);
	}
	for(i=0;i<n;i++){
		if(i%9==0){
			printf("\nCac so chia het cho 9 <=n la: %d",i);
		}
	}
}
void bai3(){
	int mang[100],x,y; 
	printf("\nNhap so luong lop: ");
	scanf("%d",&x);
	for(y=1;y<=x;y++){
		printf("\nNhap si so cho tung lop %d:",y);
		scanf("%d",&mang[y]);
	}
	printf("\n-----Thong tin lop CNTT------");
	printf("\nSo luong lop la: %d",x);
	int dem=0;
	for(y=1;y<=x;y++){
		if(mang[y]>=30){
			dem=dem+1;
		}
	}printf("\nSo lop co si so >=30 la: %d",dem);
	int tongso=0;
	for(y=1;y<=x;y++){
		tongso=tongso+mang[y];
	}
	float tbc;
	tbc=tongso/x;
	printf("\nTrung binh si so lop la: %.2f",tbc);
	int vtmin=0;
	int min=mang[0];
	for(y=1;y<=x;y++){
		if(mang[y]<min){
			vtmin=y;
			min=mang[y];
		}
	}
	printf("\nLop co si so nho nhat la: %d",vtmin);
	printf("\nLop co si so nho nhat co si so: %d",min);
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
