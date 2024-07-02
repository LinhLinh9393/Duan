#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
	int chonso;
	do{
		printf("\n+=======Menu========+");
		printf("\n1.Thong tin ban be");
		printf("\n2.Xep loai");
		printf("\n3.Mang");
		printf("\n0.Thoat");
		printf("\n+=======End=========+");
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
				printf("Nhap sai so");
		}
	}while(chonso!=0);
}
void bai1(){
	printf("\n-------Bai1-------");
	char hoten[50];
	int tuoi;
	printf("\nNhap ho ten cua ban: ");
	fflush(stdin);gets(hoten);
	printf("\nNhap tuoi cua ban: ");
	scanf("%d",&tuoi);
	printf("\nNhap ho ten ban cua  ban: ");
	fflush(stdin);gets(hoten);
	printf("\nNhap tuoi ban cua ban: ");
	scanf("%d",&tuoi);
	printf("\n+++++++Thong tin ban be++++++++");
	printf("\nHo ten ban: %s",hoten);
	printf("\nTuoi cua ban: %d",tuoi);
	printf("\nHo ten ban cua ban: %s",hoten);
	printf("\nTuoi ban cua ban: %d",tuoi);
}
void bai2(){
	printf("\n-------Bai2------");
	float diem;
	printf("\nNhap diem sinh vien: ");
	scanf("%f",&diem);
	if(diem>=9){
		printf("\nXep loai Xuat sac");
	}else if(diem>=8 ){
		printf("\nXep loai Gioi");
	}else if(diem>=6.5){
		printf("\nXep loai Kha");
	}else if(diem>=5){
		printf("\nXep loai TB");
	}else{
		printf("\nXep loai Kem");
	}
}
void bai3(){
	printf("\n------Bai3-------");
	int mang[100],a,b,c;
	printf("\nNhap so phan tu cua mang a= ");
	scanf("%d",&a);
	for(b=0;b<a;b++){
		printf("\nNhap phan tu thu %d: ",b);
		scanf("%d",&mang[b]);
	}
	printf("\nMang ban dau la: ");
	for(b=0;b<a;b++)
	    printf("\n%d",mang[b]);
	printf("\nCac so chan trong mang la: ");
    for(b=0;b<a;b++)
        if(mang[b]%2==0){
            printf("\n%d ",mang[b]);
        }    
        
    int max=mang[0];    
    int min=mang[0];
    for(b=0;b<a;b++){
    	if(mang[b]>max) 
    	    max=mang[b];
    	if(mang[b]<min)
		    min=mang[b];	
	}
	printf("\nPhan tu lon nhat cua mang la: %d ",max);
	printf("\nPhan tu nho nhat cua mang la: %d ",min);
	for(b=0;b<a;b++){
	   int n=mang[b];
	   mang[b]=mang[c];
	   mang[c]=n;
    }
    printf("\nMang dao nguoc la: ");
    for(b=0;b<a;b++){
    	printf("\n%d",mang[b]);
	}
	for(b=0;b<a;b++)
	    for(c=b+1;c<a;c++){
	        	int tam=mang[b];
	        	mang[b]=mang[c];
	        	mang[c]=tam;
		}
	printf("\nMang sap xep giam dan la: ");
	for(b=0;b<a;b++)
	    printf("\n%d",mang[b]);		
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
