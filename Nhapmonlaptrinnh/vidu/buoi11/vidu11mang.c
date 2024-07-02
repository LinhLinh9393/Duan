#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void menu(){
	int chon;
	do{
		printf("\n=====Menu=====");
		printf("\n1.Nhap phan tu");
		printf("\n2.Xuat phan tu");
		printf("\n3.Sap xep phan tu");
		printf("\n4.Tim max min");
		printf("\no.Thoat");
		printf("\n====End====");
		printf("\nNhap so tu 0 den 4: ");
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
			case 4:
				bai4();break;
			default:
				printf("Nhap sai so");	
		}
	}while(chon!=0);
}
void bai1(){
	int mang[100],n,i;
    printf("\nNhap phan tu cua mang n= ");
    scanf("%d",&n);
    for(i=0;i<n;i++){
      printf("\nNhap phan tu thu %d: ",i);
      scanf("%d",&mang[i]);
    }
}	
void bai2(){
	int mang[100],a,m;
    printf("\nNhap phan tu cua mang a= ");
    scanf("%d",&a);
    for(m=0;m<a;m++){
      printf("\nNhap phan tu thu %d: ",m);
      scanf("%d",&mang[m]);
    }
	printf("\nMang ban dau la: ");
    for(m=0;m<a;m++)
       printf("\n%d",mang[m]);
}
void bai3(){
	int mang[100],c,d,f;
    printf("\nNhap phan tu cua mang c= ");
    scanf("%d",&c);
    for(d=0;d<c;d++){
      printf("\nNhap phan tu thu %d: ",d);
      scanf("%d",&mang[d]);
    }
	for(d=0;d<c;d++)
	    for(f=d+1;f<c;f++) 
		    if(mang[d]<mang[f]){
		    	int tam=mang[d];
		    	mang[d]=mang[f];
		    	mang[f]=tam;
			}
	printf("\nMang sap xep tang dan la: ");		  
    for(d=0;d<c;d++)
        printf("\n%d",mang[d]);
}
void bai4(){
	int mang[100],x,y;
    printf("\nNhap phan tu cua mang x= ");
    scanf("%d",&x);
    for(y=0;y<x;y++){
      printf("\nNhap phan tu thu %d: ",y);
      scanf("%d",&mang[y]);
    }
    int max=mang[0];
	int min=mang[0];
	for(y=0;y<x;y++){
		if(mang[y]>max)
		   max=mang[y];
		if(mang[y]<min)
		   min=mang[y];   
	}
	printf("\nPhan tu lon nhat la: %d",max);        
	printf("\nPhan tu nho nhat la: %d",min);
}
int main(int argc, char *argv[]) {
//	 Khai bao 1 mang a
//	int A[5];
//	int B[5]={24,1,5,3,8};
//	
////	Khoi tao gia tri mang A
//	A[0]=12;
//	A[1]=14;
//	A[2]=4;
//	A[3]=55;
//	A[4]=7;
//	printf("%d",B[3]);
//	printf("\n%d",A[2]);
//	
////	In toan bo mang A
//	printf("\nIn toan bo mang A: ");
//	int i;
//	for(i=0;i<5;i++)
//	    printf("%d ",A[i]);
//	    
	    
///*Vi du 1:Nhap vao 1 mang n phan tu.
//In ra man hinh
//-Mang ban dau
//-Sap xep mang theo chieu tang dan. In mang sap xep
//-Tim so lon nhat va nho nhat trong mang */
//    int mang[100],n,i,j;
//    printf("\nNhap phan tu cua mang n= ");
//    scanf("%d",&n);
//    //Nhap phan tu cho mang
//    for(i=0;i<n;i++){
//      printf("\nNhap phan tu thu: %d ",i);
//      scanf("%d",&mang[i]);
//    }
//    //In mang ban dau:
//    printf("\nMang ban dau la: ");
//    for(i=0;i<n;i++)
//       printf("\n%d",mang[i]);
//    //Sap xep mang
//	for(i=0;i<n;i++)
//	    for(j=i+1;j<n;j++) 
//		    if(mang[i]>mang[j]){
//		    	int tam=mang[i];
//		    	mang[i]=mang[j];
//		    	mang[j]=tam;
//			}
//	printf("\nMang sap xep tang dan la: ");		  
//    for(i=0;i<n;i++)
//        printf("\n%d",mang[i]);
//    //Tim min max trong mang
//	int max=mang[0];
//	int min=mang[0];
//	for(i=0;i<n;i++){
//		if(mang[i]>max)
//		   max=mang[i];
//		if(mang[i]<min)
//		   min=mang[i];   
//	}
//	printf("\nPhan tu lon nhat la: %d",max);        
//	printf("\nPhan tu nho nhat la: %d",min);
    menu();
	return 0;
}
