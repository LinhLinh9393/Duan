#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
 void menu(){
	int chonso;
	do{
		printf("\n+======Menu======+");
		printf("\n1. Kiem tra so nguyen");
		printf("\n2. Tim uoc chung va boi chung cua 2 so");
		printf("\n3. Chuong trinh tinh tien cho quan Karaoke");
		printf("\n4. Tinh tien dien");
		printf("\n5. Chuc nang doi tien");
		printf("\n0. Thoat");
		printf("\n+=======End=======+");
		printf("\nNhap so tu 0 den 5: ");
		scanf("%d", &chonso);
		switch(chonso){
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
		    case 5:
		    	bai5();break;
		    case 6: 
		        bai6();break;
		    case 7:
		    	bai7();break;
		    case 8:
		    	bai8();break;
		    case 9:
		    	bai9();break;
		    case 10:
		    	bai10();break;
		    default:
		    	printf("Nhap sai so: ");
		}
	}while(chonso!=0);
}
void bai1(){
  float N;  
   printf ("Nhap so N: ");
   scanf ("%f", &N);
   if (N==(int)N){
       printf ("\n%g la so nguyen",N);
   }else{
       printf ("\n%g khong phai la so nguyen",N);
   }
      
    if(N> 1 && N==(int)N){
    	int so = N;
		int i;
		int thu = 1;
		for(i = 2; i <= sqrt(so); i++){
			if(so % i == 0){
				thu = 0;
			}
	    }	
		if(thu == 1) {
			printf("\n%d la so nguyen to ", so);
		}else{
			printf("\n%d khong phai la so nguyen to ", so);
	    }	
	}else{
		printf ("\n%g khong phai la so nguyen to ",N);
	} 

    if (N>0 && (sqrt(N)==(int)sqrt(N))){
    	printf ("\n%g la so chinh phuong",N);
	}else {
		printf ("\n%g khong phai la so chinh phuong",N);
	}
}
void bai2(){
	int a, b;
	printf("\nNhap so a: ");
	scanf("%d", &a);
	printf("Nhap so b: ");
	scanf("%d", &b);
	if(a==0 && b==0){
		printf("\nKhong ton tai Uoc chung lon nhat, Boi chung nho nhat");
	}else if(a==0 || b==0) {
		printf("\nKhong co Uoc chung lon nhat, Boi chung nho nhat = %d", (a == 0) ? b : a);
	}else if(a>0 && b>0){ 
		int bc = a * b;			
		while(a != b){
			if(a > b){
				a = a - b;
			}else{
				b=b-a;
			}
		}
        printf("\nUoc chung lon nhat = %d", b);
		printf("\nBoi chung nho nhat = %d", bc / b);
	}else if(a < 0 && b >0){
		int bc = a * b;
		a = -a;
		while(a != b){
			if(a > b){
				a = a - b;
			}else{
				b = b - a;
			}
		}
        printf("\nUoc chung lon nhat = %d", b);
		printf("\nBoi chung nho nhat = %d", -bc / b);
	}else if(a > 0 && b < 0){
		int bc = a * b;
		b = -b;
		while(a != b){
			if(a > b){
				a = a - b;
			}else{
				b = b - a;
			}
		}
        printf("\nUoc chung lon nhat = %d", b);
		printf("\nBoi chung nho nhat = %d", -bc / b);
	}else{
    	int bc = a * b;
		a = -a;
		b = -b;
		while(a != b){
			if(a > b){
				a = a - b;
			}else{
	            b = b - a;
            }
		}
        printf("\nUoc chung lon nhat = %d", b);
		printf("\nBoi chung nho nhat = %d", bc / b);
		}
}
void bai3(){
    int giobd,giokt;
    printf("\nNhap gio bat dau: ");
    scanf("%d",&giobd);
    printf("\nNhap gio ket thuc: ");
    scanf("%d",&giokt);
    int giohat=giokt-giobd;
    double tienthanhtoan;
    int giothem;
    double tienthem;
    if(giobd<=3){
    	tienthanhtoan=giohat*150000;
    }else{
		giothem=giohat-3;
		tienthem=giothem*150000*0.7;
		tienthanhtoan=3*150000+tienthem; 
	}
	if(giobd>=14 && giobd<=17){
		tienthanhtoan=tienthanhtoan*0.9;
	}
	printf("\nSo tien can thanh toan la: %.f",tienthanhtoan);
}
void bai4(){
	double kwh;
	printf("\nMoi nhap so kwh dien: ");
	scanf("%lf", &kwh);
	double tiendien;
	double bac1=1678;
	double bac2=1734;
	double bac3=2014;
	double bac4=2536;
	double bac5=2834;
	double bac6=2927;
	if(kwh<=50 && kwh>0){
		tiendien=kwh*bac1;
		printf("\nSo tien dien can thanh toan la: %.f",tiendien);
	}else if(kwh<=100 && kwh>50){	
		tiendien=50*bac1+(kwh-50)*bac2;
		printf("\nSo tien dien can thanh toan la: %.f",tiendien);
	}else if(kwh<=200 && kwh>100){
		tiendien=50*bac1+50*bac2+(kwh-100)*bac3;
		printf("\nSo tien dien can thanh toan la: %.f",tiendien);
	}else if(kwh<=300 && kwh>200){
		tiendien=50*bac1+50*bac2+100*bac3+(kwh-200)*bac4;
		printf("\nSo tien dien can thanh toan la: %.f",tiendien);
	}else if(kwh<=400 && kwh>300){
		tiendien=50*bac1+50*bac2+100*bac3+100*bac4+(kwh-300)*bac5;
		printf("\nSo tien dien can thanh toan la: %.f",tiendien);
	}else{
		tiendien=50*bac1+50*bac2+100*bac3+100*bac4+100*bac5+(kwh-400)*bac6;
		printf("\nSo tien dien can thanh toan la: %.f",tiendien);
    }
}
void bai5(){
	int sotien;
	int sototien;
	int menhgia[9]={500,200,100,50,20,10,5,2,1};
	printf("\nNhap so tien can doi(k: ");
	scanf("%d",&sotien);
	while(sotien){
		int x;
		for(x=0;x<9;x++){
			sototien=sotien/menhgia[x];
			if(sototien!=0){
				printf("\nCo %d to %d",sototien,menhgia[x]);
			}
			sotien=sotien-sototien*menhgia[x];
		}
	}
}
void bai6(){
}
void bai7(){
}
void bai8(){
}
void bai9(){
}
void bai10(){
}
int main(int argc, char *argv[]) {
	menu();
	return 0;
}
