#include <bits/stdc++.h>
using namespace std;
int main()
{
   freopen("abcs.int","r",stdin);
   freopen("abcs.out","w",stdout);
    int i;
    long long a[7];
    for(i=0;i<=6;i++)
    cin>>a[i];
    sort (a,a+7);
    cout<<a[0]<<" "<<a[1]<<" "<<a[6]-a[0]-a[1];
}
