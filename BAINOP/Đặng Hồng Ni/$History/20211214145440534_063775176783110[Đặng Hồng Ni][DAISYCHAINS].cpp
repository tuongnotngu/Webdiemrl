#include<bits/stdc++.h>
using namespace std;
long int n,a[1000],i,j,tb,s,dem,k,l,d;
int main()
{
     freopen("DAISYCHAINS.inp","r",stdin);
    freopen("DAISYCHAINS.out","w",stdout);
    cin>>n;
    for(i=1;i<=n;i++) cin>>a[i];
    tb=0;
    s=0;
    for(i=1;i<=n;i++)
        for(j=i+1;j<=n;j++)
        {
            for(k=i;k<=j;k++) tb=tb+a[k];
           tb=tb/(j-i+1);
                for(l=i;l<=k;l++) if(tb==a[l]) {s++; break;}
        }
        cout<<s;

}
