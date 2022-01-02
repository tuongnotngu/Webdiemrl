#include<bits/stdc++.h>

using namespace std;

int main()
{
    freopen("DAISYCHAINS.INP","r",stdin);
    freopen("DAISYCHAINS.OUT","w",stdout);
     int N=107;
     int V=1007;
    int a[N];
    int n; cin>>n;
    for(int i=1;i<=n;i++) cin>>a[i];
    for(int i=1;i<=n;i++) a[i]+=a[i-1];
    int ans=0;
}
