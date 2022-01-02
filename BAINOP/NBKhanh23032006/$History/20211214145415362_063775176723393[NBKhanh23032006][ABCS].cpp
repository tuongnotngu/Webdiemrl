#include <bits/stdc++.h>
using namespace std;
int main()
{
   freopen("ABCS.int","r",stdin);
   freopen("ABCS.out","w",stdout);
    int i;
    long a[7];
    for(i=0;i<=6;i++)
    cin>>a[i];
    sort (a,a+7);
    cout<<a[0]<<" "<<a[1]<<" "<<a[6]-a[0]-a[1];
}
