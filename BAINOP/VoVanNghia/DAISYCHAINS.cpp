#include<bits/stdc++.h>
using namespace std;
const long long mx=1000;
long long a[mx], f[mx], n, i, j, ans=0;
int main()
{
    freopen("DAISYCHAINS.INP","r",stdin);
    freopen("DAISYCHAINS.OUT","w",stdout);
    cin>>n;
    for(int i=1;i<=n;i++)
    {
        cin>>a[i];
        f[i]=f[i-1]+a[i];
    }
    for(int i=1;i<=n;i++)
    {
        for(int j=i;j<=n;j++)
        {
            if ((f[j]-f[i-1])%(j-i+1)==0)
            {
                long long s=(f[j]-f[i-1])/(j-i+1);
                if (count(a+i,a+j+1,s)!=0) ans++;
            }
        }
    }
    cout<<ans;
}
