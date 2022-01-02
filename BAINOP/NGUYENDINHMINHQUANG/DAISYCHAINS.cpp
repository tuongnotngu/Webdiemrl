#include<bits/stdc++.h>
using namespace std;
using ll=long long;

int main()
{
    freopen("DAISYCHAINS.INP","r",stdin);
    freopen("DAISYCHAINS.OUT","w",stdout);
    ll n,a[105],tong[105][105],k;
    k=0;
    cin>>n;
    for(ll i=1;i<=n;i++)
        cin>>a[i];
    for(ll i=1;i<=n;i++)
        tong[i][1]=a[i];
    for(ll i=1;i<=n;i++)
        for(ll j=1;j<=i;j++)
    {
        tong[i][j]=tong[i][j-1];
    }
    for(ll i=1;i<=n;i++)
        for(ll j=1;j<=i;j++)
            for(ll l=1;l<=n;l++)
            if (tong[i][j]==a[l]) k+=1;
    cout<<k;
}
