#include <iostream>
using namespace std;

int partition(int a[],int s,int e){
     int i=s;
     int pivot = a[e];
     for(int j=s;j<=e-1;j++){
        if(a[j] < pivot){
            swap(a[i],a[j]);
            i++;
        }
     }
     swap(a[i],a[e]);
     return i;
}

void quickSort(int a[],int s,int e){
    if(s>=e){
        return;
    }
    int p = partition(a,s,e);
    quickSort(a,s,p-1);
    quickSort(a,p+1,e);
}

int main(){
     int a[] = {11,5,3,2,6,4};
     quickSort(a,0,5);

  for(int i=0;i<6;i++){
    cout<<a[i]<<" ";
  }

   return 0;
}
