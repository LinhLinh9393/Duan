#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
	int chon;
	do{
		printf("\n======Menu======");
		printf("\n1.Thong tin ve nguoi yeu cu");
		printf("\n2.Phan loai");
		printf("\n3.Mang NYC");
		printf("\n0.Thoat");
		printf("\n=======End=====");
		printf("\nMoi nhap so tu 0 den 3: ");
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
				printf("\nNhap sai so moi nhap lai");			
		}
	}while(chon!=0);
}
void bai1(){
	char hoten[50],chieucao[30];
	int cannang;
	printf("\nNhap ho ten NYC: ");
	fflush(stdin);gets(hoten);
	printf("\nNhap can nang NYC: ");
	scanf("%d",&cannang);
	printf("\nNhap chieu cao NYc: ");
	fflush(stdin);gets(chieucao);
	printf("\n-------Thong tin NYc-------");
	printf("\nHo ten NYC: %s",hoten);
	printf("\nCan nang NYC: %d",cannang);
	printf("\nChieu cao NYc: %s",chieucao);
}
void bai2(){
	int tuoi;
	printf("\nNhap tuoi nguoi yeu ban: ");
	scanf("%d",&tuoi);
	if(tuoi<=15){
		printf("\nNhap sai du lieu");
	}else if(tuoi>=18 && tuoi<=24){
		printf("\nDu tuoi chiu trach nhiem");
	}else if(tuoi>24 && tuoi<=30){
		printf("\nNuoi duoc minh hoc lai");
	}else if(tuoi>30){
		printf("\nBan la phi cong");
	}else{
		printf("\nCan than neu khong muon boc lich");
	}
}
void bai3(){
	int mang[100],i,j;
	int n;
	printf("\nNhap so luong NYC: ");
	scanf("%d",&n);
	for(i=1;i<=n;i++){
		printf("\nNhap can nang cua NYC thu %d: ",i);
		scanf("%d",&mang[i]);
	}
	printf("\n-------Mang NYC------");
	printf("\nSo luong NYC la: %d",n);
	printf("\nNYC co can nang >=60kg la: ");
	for(i=1;i<=n;i++){
		if(mang[i]>=60){
			printf("%d",i);
		}
	}
	int min=mang[1];
	for(i=1;i<=n;i++){
		if(mang[i]<min){
			min=mang[i];
		}
	}
	printf("\nNYC gay nhat la: NYC thu %d",min);
	for(i=1;i<=n;i++){
		for(j=1;j<=n;j++){
			if(mang[i]<mang[j]){
				int tam=mang[i];
				mang[i]=mang[j];
				mang[j]=tam;
			}
		}
	}	
	printf("\nSap xep  can nang theo chieu tang dan: ");
	for(i=1;i<=n;i++){
		printf("\n%d",mang[i]);
	}
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
