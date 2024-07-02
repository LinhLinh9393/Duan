#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int chon;
	do{
		printf("+----Menu----+\n"); 
		printf("1. Tinh trung binh cong cac so chia het cho 2");
		printf("\n2. Kiem tra so Nguyen to");
		printf("\n3. Kiem tra so Chinh phuong");
		printf("\n4. In ra bang cuu chuong so 2");
		printf("\n0. Thoat");
		printf("\n+----End----+");
		int so;
		printf("\nNhap so tu 0 den 5: ");
	    scanf("%d",&so);
	    switch(so){
	    	case 0:
	    		exit(0);
	    		break;
	    	case 1:	
	    printf("\n1. Tinh trung binh cong cac so chia het cho 2");
	    int min , max;
	    printf("\nNhap min : ");
	    scanf("%d", &min);
		printf("\nNhap max : ");
		scanf("%d", &max);
	    int tong , dem ,trungbinh;
        tong = dem = 0;
	    int i = min;
	    while  (i<=max){
		    if( i%2==0){
			    printf("%d",i);
			    tong += i;
			    dem ++;
			    }
	            i ++;
            }
		    trungbinh = tong/dem;
	        printf("trung binh cong cac so chia het cho 2 : %d",trungbinh);
	     break;
		 case 3:  
	    printf("\n3. Kiem tra so Chinh phuong");
        int a;
        printf("\nNhap a: ");
        scanf("%d", &a);
        if(a<1){
	    	printf("\n%d khong la so chinh phhuong");
		}
		int m=1;
        while(m*m<=a){
            if(m*m==a){
           	    printf("\n%d la so chinh phuong");  
                m++;
            }
        }
        break;
        }
    }while(chon!=0);	
	return 0;
}

