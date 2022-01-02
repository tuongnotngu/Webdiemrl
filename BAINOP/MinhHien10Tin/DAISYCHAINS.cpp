#include <bits/stdc++.h>
using namespace std;
#define lli long long int
lli f[100000000]={}, a[100000000], k=0, dem = 0, n;
int main(){

    if (fopen ("DAISYCHAINS.inp","r")){
        freopen ("DAISYCHAINS.inp","r",stdin);
        freopen ("DAISYCHAINS.out","w",stdout);
    }

    cin>>n;

    for (int i=1;i<=n;i++) cin>>a[i];

    for (int i=1;i<=n;i++){
        for (int j=i+1;j<=n;j++){
           k++; f[k] = ( a[i] + a[j] )/2;
        }
    }
    for (int i=1;i<=n;i++){
      for (int j=i+1;j<=k;j++){
        if (a[i]==f[j]) dem++;}
    }

    cout<<dem+1;
}
