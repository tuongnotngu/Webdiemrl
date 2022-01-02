#include<bits/stdc++.h>
using namespace std;
long n[7];
int main()
{
    freopen("ABCS.INP","r",stdin);
    freopen("ABCS.OUT","w",stdout);
    for(int i=0;i<7;i++)
        cin>>n[i];
    sort(n,n+7);
    cout<<n[0]<<" "<<n[1]<<" "<<n[6]-n[0]-n[1];
}
