#include<bits/stdc++.h>

using namespace std;
const int N=1e3+5;
int n , a[N] , mp[N][N] , res;
int main()
{
    if (fopen("daisychains.inp" , "r"))
    {
        freopen("daisychains.inp" , "r" , stdin);
        freopen("daisychains.out" , "w" , stdout);
    }
    cin>>n;
    for(int i=1 ; i<=n ; i++) cin>>a[i];
    for(int i=1 ; i<=n ; i++)
    {
        int sum=0;
        for(int j=i ; j>=1 ; j--)
        {
            int num=i-j+1;
            sum+=a[j];
            mp[i][a[j]]++;
            int tsum=sum/num;
            if (tsum*num != sum) continue;
            if (mp[i][tsum]) res++;
        }
    }
    cout<<res;
}
